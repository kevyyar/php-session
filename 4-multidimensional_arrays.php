<?php
// multidimensional arrays
$blogs = [
    ['title' => 'Blog 1 Title', 'content' => 'The content of blog 1', 'author' => 'John Doe', 'likes' => 23 ],
    ['title' => 'Blog 2 Title', 'content' => 'The content of blog 2', 'author' => 'Mari Doe', 'likes' => 3 ],
    ['title' => 'Blog 3 Title', 'content' => 'The content of blog 3', 'author' => 'Juju Doe', 'likes' => 13 ]
];
print_r($blogs);
echo "<br />";
print_r($blogs[1]['author']);