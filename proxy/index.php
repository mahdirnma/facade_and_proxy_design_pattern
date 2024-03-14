<?php
interface DownloadInterface{
    public function download();
}
class DownloadService implements DownloadInterface{
    private $file;
    public function __construct($file)
    {
        $this->file=$file;
    }

    public function download()
    {
        echo "download file :".$this->file;
    }
}
class proxyDownload implements DownloadInterface {
    private $cachFile=null;
    private $file;
    public function __construct($file)
    {
        $this->file=$file;
    }


    public function download()
    {
        if ($this->cachFile==null){
            $this->cachFile=new DownloadService($this->file);
        }
        $this->cachFile->download();
    }
}