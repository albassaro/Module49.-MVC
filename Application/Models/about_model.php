<?php 

class about_model extends Model{
    
    public function getData(){
        // Эмуляция реальных данных 
        $team = [
            [
                'img'=>['src'=>'images/team-image1.jpg', 'class'=>'img-responsive'],
                'name' => 'Andrew Orange',
                'position'=> 'Art Director',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.'
            ],

            [
                'img'=>['src'=>'images/team-image2.jpg', 'class'=>'img-responsive'],
                'name' => 'Catherine Soft',
                'position'=> 'Senior Manager',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.'
            ],
            [
                'img'=>['src'=>'images/team-image3.jpg', 'class'=>'img-responsive'],
                'name' => 'Jack Wilson',
                'position'=> 'CEO / Founder',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.'
            ],

        ];

        $comments = [
            [
            'img'=>['src'=>'images/tst-image1.jpg', 'class'=>'img-responsive'],
            'name' => 'Michael',
            'comment' => 'Vestibulum tempor facilisis efficitur. Sed nec nisi sit amet nibh pellentesque elementum. In viverra ipsum ornare sapien rhoncus ullamcorper.'
            ],

            [
            'img'=>['src'=>'images/tst-image2.jpg', 'class'=>'img-responsive'],
            'name' => 'Sofia',
            'comment' => 'Donec pretium tristique elit eget sodales. Pellentesque posuere, nunc id interdum venenatis, leo odio cursus sapien, ac malesuada nisl libero eget urna.'
            ],

            [
            'img'=>['src'=>'images/tst-image3.jpg', 'class'=>'img-responsive'],
            'name' => 'Monica',           
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.'
            ],
        ];

        return [$team, $comments];
    }
}