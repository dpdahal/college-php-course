<?php

interface Nepali
{

    public function play_nepali_song();

}

interface English
{
    public function play_english_song();
}

interface Chinese
{

}


class Songs implements Nepali, English
{

    public function play_nepali_song()
    {

    }

    public function play_english_song()
    {

    }
}