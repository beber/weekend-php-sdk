<?php

class WeekEnd
{
    protected $text;
    protected $subText;

    protected function getData()
    {
        $data           = json_decode(file_get_contents('http://api.estcequecestbientotleweekend.fr'), true);
        $this->text     = $data['text'];
        $this->subText  = $data['subtext'];
    }

    public function getText()
    {
        if (!$this->text) {
            $this->getData();
        }

        return $this->text;
    }

    public function getSubText()
    {
        if (!$this->subText) {
            $this->getData();
        }

        return $this->subText;
    }
}