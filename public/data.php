<?php

declare(strict_types=1);

// The two different arrays connects via AuthorID (indexed in Authors array)
// added array for 5 different authors.

$authors = [
    [
        'fullName' => 'Viktor Puke',
    ],
    [
        'fullName' => 'Erik Johannesson',   
    ],
    [
        'fullName' => 'Betsy Alva Soplin',
    ],
    [
        'fullName' => 'Bernhard Stedt',  
    ],
    [
        'fullName' => 'Daniel Thorsen',
    ],

];

// Added array for 10 news feed posts.

$articles = [

    [
        'title' => 'iPhone 11',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2019-06-06',
        'likeCounter' => '40',
        'contentIMG' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-11-pro-max-silver-select-2019?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1566953858420',
        'authorID' => 0
    ],
    [
        'title' => 'Samsung Galaxy S10',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2019-07-03',
        'likeCounter' => '60',
        'contentIMG' => 'https://www.computers.co.ug/wp-content/uploads/2019/03/samsung-galaxy-s10.png',
        'authorID' => 1
    ],
    [
        'title' => 'Google Pixel 4',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2019-05-03',
        'likeCounter' => '150',
        'contentIMG' => 'https://cdn.androidheadlines.com/wp-content/uploads/2019/10/google-pixel-4-xl-panda.png',
        'authorID' => 2
    ],
    [
        'title' => 'Samsung Galaxy S10 plus',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2019-02-09',
        'likeCounter' => '99',
        'contentIMG' => 'data:image/jpeg;base64,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',
        'authorID' => 3
    ],
    [
        'title' => 'OnePlus 7 pro',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2019-04-15',
        'likeCounter' => '1230',
        'contentIMG' => 'http://geniusmobile.lk/wp-content/uploads/2019/05/oneplus-7.png',
        'authorID' => 4
    ],
    [
        'title' => 'Google Pixel 4 XL',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2018-11-05',
        'likeCounter' => '678',
        'contentIMG' => 'https://i.pinimg.com/originals/10/62/15/1062158917955ba0d284b3d338bb7df1.png',
        'authorID' => 0
    ],
    [
        'title' => 'Huawei P30 Pro',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2018-12-05',
        'likeCounter' => '2',
        'contentIMG' => 'https://consumer-img.huawei.com/content/dam/huawei-cbg-site/common/mkt/list-image/phones/p30-pro/P30Pro_twilight.png',
        'authorID' => 1
    ],
    [
        'title' => 'OnePlus 6T',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2019-08-03',
        'likeCounter' => '41',
        'contentIMG' => 'https://www.skymartbw.com/wp-content/uploads/2018/11/Oneplus-6T-midnight-black-cover-600x600.png',
        'authorID' => 2
    ],
    [
        'title' => 'Iphone XR',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2019-05-12',
        'likeCounter' => '87',
        'contentIMG' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-xr-white-select-201809?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1551226036668',
        'authorID' => 3
    ],
    [
        'title' => 'Moto G7 Power',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus, nunc sit amet lobortis pellentesque, sem elit porttitor enim, eget consequat tellus nisl quis turpis. Nullam ornare risus in velit accumsan pretium. Quisque dui justo, 
        sagittis nec ultricies id, commodo at arcu. Fusce ornare ligula vitae tellus dictum convallis. Praesent aliquam malesuada aliquet. Duis et lacus nisi. Integer tincidunt efficitur nibh, id imperdiet ex lacinia eget.
        Fusce vel eleifend tortor, quis sodales felis. Quisque sem magna, venenatis malesuada augue fringilla, lobortis vestibulum eros. Suspendisse vitae tincidunt augue, sit amet ornare urna. Aenean vel accumsan lorem. Morbi eget ligula varius, interdum.',
        'publishDate' => '2019-01-15',
        'likeCounter' => '1',
        'contentIMG' => 'https://shop.rhmtelecom.com/images/thumbs/0005143_motorola-moto-g7-power_550.png',
        'authorID' => 4
    ],

];
