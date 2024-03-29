<?php
namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\AbstractHandler;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;
use Illuminate\Support\Facades\Session;
use App\Image;
use Intervention\Image\ImageManagerStatic as Imageresize;
ini_set('max_execution_time', 900); //300 seconds = 5 minutes

class UploadController extends Controller
{
    /**
     * Handles the file upload
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws UploadMissingFileException
     * @throws \Pion\Laravel\ChunkUpload\Exceptions\UploadFailedException
     */
    
    public function upload(Request $request) {
        // create the file receiver
        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));

        // check if the upload is success, throw exception or return response you need
        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }

        // receive the file
        $save = $receiver->receive();

        // check if the upload has finished (in chunk mode it will send smaller files)
        if ($save->isFinished()) {
            // save the file and return any response you need, current example uses `move` function. If you are
            // not using move, you need to manually delete the file by unlink($save->getFile()->getPathname())
           
            return $this->saveFile($save->getFile());
          
        }

        // we are in chunk mode, lets send the current progress
        /** @var AbstractHandler $handler */
        $handler = $save->handler();

        return response()->json([
            "done" => $handler->getPercentageDone(),
            'status' => true
        ]);
    }

    /**
     * Saves the file to S3 server
     *
     * @param UploadedFile $file
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function saveFileToS3($file)
    {
        $fileName = $this->createFilename($file);

        $disk = Storage::disk('s3');
        $local = Storage::disk("local");
        // It's better to use streaming Streaming (laravel 5.4+)
        $local->putFileAs("uploads/" . date('Y-m-d'), $file, $fileName);








        // for older laravel
       //$disk->put($fileName, file_get_contents($file), 'public');
        $mime = str_replace('/', '-', $file->getMimeType());
        //storing the path in the database 


        // We need to delete the file when uploaded to s3
      //  unlink($file->getPathname());

        return response()->json([
            'path' => $disk->url($fileName),
            'name' => $fileName,
            'mime_type' =>$mime
        ]);
    }

    /**
     * Saves the file
     *
     * @param UploadedFile $file
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function saveFile(UploadedFile $file)
    {
        $fileName = $this->createFilename($file);
        // Group files by mime type
        $mime = str_replace('/', '-', $file->getMimeType());
        // Group files by the date (week
        $dateFolder = date("Y-m-d");

        // Build the file path
        $filePath = "upload/{$mime}/{$dateFolder}/";
        $finalPath = storage_path("app/".$filePath);

        // move the file name
        $file->move($finalPath, $fileName);
        

        return response()->json([
            'path' => $filePath,
            'name' => $fileName,
            'mime_type' => $mime
        ]);
    }

    /**
     * Create unique filename for uploaded file
     * @param UploadedFile $file
     * @return string
     */
    protected function createFilename(UploadedFile $file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = str_replace(".".$extension, "", $file->getClientOriginalName()); // Filename without extension

        // Add timestamp hash to name of the file
        $filename .= "_" . md5(time()) . "." . $extension;

        //store values for the images in database

        $imagetb = new Image;
        $imagetb->filename= $filename;
        $imagetb->album_id = Session::get("album_id");
        $imagetb->category = Session::get("cat");
        $imagetb->edition = Session::get("edition");
        $imagetb->thumbnail = date("Y-m-d") . "/" . $filename;
        $imagetb->save();

        // and then unset the session specific stored data

        return $filename;
    }

    public function resize(){
        $directories = Storage::disk("s3")->allFiles("uploads/2019-02-11");
        foreach ($directories as $image){
            echo $image . "<br>";
            $dir = explode("/", $image);
            $file = Storage::disk("s3")->get($image); //This is the original file
            $width = Imageresize::make($file)->width();
            $height = Imageresize::make($file)->height();
            $modwidth = 600;
            $diff = $width / $modwidth;
            $modheight = $height / $diff;
            $Path =  public_path(url($file));
            $diff = $width / $modwidth;
            $modheight = $height / $diff;
            $pathtosave = "uploads/" . $dir[1];
            if(!file_exists(public_path($pathtosave))) {
                mkdir(public_path($pathtosave));
            }
            $save = Imageresize::make($file)->resize($modwidth, $modheight)->save(public_path($image));

        }

        exit;

    }

}