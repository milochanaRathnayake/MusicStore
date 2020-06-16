<?php
namespace Domain;

class Track
{
    private $track_id;
    private $track_name;
    private $track_desc;
    private $album_id;
    private $track_type_id;
    
    public function __construct($track_id = null, $track_name = null, $track_desc = null, $album_id = null, $track_type_id = null){
        $this->track_id = $track_id;
        $this->track_name = $track_name;
        $this->track_desc = $track_desc;
        $this->album_id = $album_id;
        $this->track_type_id = $track_type_id;
    }
    
    /**
     * @return string
     */
    public function getTrack_id()
    {
        return $this->track_id;
    }

    /**
     * @return string
     */
    public function getTrack_name()
    {
        return $this->track_name;
    }

    /**
     * @return string
     */
    public function getTrack_desc()
    {
        return $this->track_desc;
    }

    /**
     * @return string
     */
    public function getAlbum_id()
    {
        return $this->album_id;
    }

    /**
     * @return string
     */
    public function getTrack_type_id()
    {
        return $this->track_type_id;
    }

   
}

