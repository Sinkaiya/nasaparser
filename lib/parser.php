<?php

class parser
{
    private $rssData = '';
    public $parsedData = array();

    public function __construct()
    {
        $this->rssData = simplexml_load_file("https://www.nasa.gov/rss/dyn/lg_image_of_the_day.rss");
    }

    public function makeParsedArray() //Функция, выводящая нужные нам поля RSS-ленты на экран
    {
        foreach ($this->rssData->channel as $truck) {
            foreach ($truck->item as $container) {
                if (!mb_substr($container->title, 0, 1)) continue;
                else {
                    echo '<b>' . $container->title . '</b> (' . $container->pubDate . ')<br>' . $container->description . '<br>';
                }
                foreach ($container->enclosure as $pallet) {
                    echo '<a href="' . $pallet->attributes()->{'url'} . '" target="_blank">' . $pallet->attributes()->{'url'} .  '</a><br><br>';
                }
            }
        }
    }
}