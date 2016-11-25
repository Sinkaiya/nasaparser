<?php

class parser
{
    private $rssData = '';
    public $parsedData = array();

    public function __construct()
    {
        $this->rssData = simplexml_load_file("https://www.nasa.gov/rss/dyn/lg_image_of_the_day.rss");
        foreach ($this->rssData->channel as $truck)
        {
            foreach ($truck->item as $container)
            {
                if (!mb_substr($container->title, 0, 1)) continue;
                else
                {
                    $title = strval($container->title);
                    $description = strval($container->description);
                    $pubDate = strval($container->pubDate);
                    foreach ($container->enclosure as $pallet)
                    {
                        $url = strval($pallet->attributes()->{'url'});
                    }
                    $i = 0;
                    $i = array ('title' => $title, 'description' => $description, 'pubDate' => $pubDate, 'url' => $url);
                    $this->parsedData[] = $i;
                    $i++;
                }
            }
        }
    }
}
/*
    public function makeParsedArray()
    {
        foreach ($this->rssData->channel as $truck)
        {
            foreach ($truck->item as $container)
            {
                if (!mb_substr($container->title, 0, 1)) continue;
                else
                {
                    $title = strval($container->title);
                    $description = strval($container->description);
                    $pubDate = strval($container->pubDate);
                    foreach ($container->enclosure as $pallet)
                    {
                        $url = strval($pallet->attributes()->{'url'});
                    }
                    $i = 0;
                    $i = array ('title' => $title, 'description' => $description, 'pubDate' => $pubDate, 'url' => $url);
                    $this->parsedData[] = $i;
                    $i++;
                }
            }
        }
    }
}*/