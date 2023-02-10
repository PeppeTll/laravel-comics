<?php
$links = [
  [
    'linkName' => 'Characters',
    'routeName' => '',
  ],
  [
    'linkName' => 'Comics',
    'routeName' => 'comics.index',
  ],
  [
    'linkName' => 'Movies',
    'routeName' => '',
  ],
  [
    'linkName' => 'TV',
    'routeName' => '',
  ],
  [
    'linkName' => 'Games',
    'routeName' => '',
  ],
  [
    'linkName' => 'Collectibles',
    'routeName' => '',
  ],
  [
    'linkName' => 'Videos',
    'routeName' => '',
  ],
  [
    'linkName' => 'Fans',
    'routeName' => '',
  ],
  [
    'linkName' => 'News',
    'routeName' => '',
  ],
  [
    'linkName' => 'Shop',
    'routeName' => '',
  ],
];
?>    


<header class="container">
  <div>
    <img src="../img/dc-logo.png" alt="">
  </div>
  <nav>
    <ul>
      @foreach ($links as $link)
        <li class="{{ Request::route()->getName() == $link['routeName'] ? 'active' : '' }}"><a
          href="{{ $link['routeName'] == '' ? '#' : route($link['routeName']) }}">{{ $link['linkName'] }}</a></li>
      @endforeach
    </ul>
  </nav>
</header>
