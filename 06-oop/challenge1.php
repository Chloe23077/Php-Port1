<?php
/*
 * Challenge 1
 */
class Article
{
    public $title;
    public $content;
    public $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPuchlished()
    {
        return $this->published;
    }
}
$article1 = new Article('My First Post', 'This is the frist post.');
$article2 = new Article('My Second Post', 'This is the second post.');

$article1->publish();

echo var_dump($article1->isPuchlished(), true) . '<br>';
echo var_dump($article2->isPuchlished(), true) . '<br>';

/*
 * challenge 2
 */

class StringUtility
{
    public static function shout($string)
    {
        return strtoupper($string) . '!';
    }

    public static function whisper($string)
    {
        return strtolower($string) . '.';
    }

    public static function repeat($string, $times = 2)
    {
        return str_repeat($string, $times);
    }
}

echo StringUtility::shout('Hello World');