<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php
        if (isset($title)):
            out($title . " | " . SITE_NAME);
        else:
            out(SITE_NAME);
        endif;
        ?></title>
        <link rel="stylesheet" href="http://www.dafyddvaughan.co.uk/css/bootstrap/bootstrap.1.4.0.min.css">
        <link rel="stylesheet" href="http://www.dafyddvaughan.co.uk/css/core3.css">
        <link rel="stylesheet" href="/css/core.css">
        <?php if (isset($shorter)): ?>
        <link rev="canonical" href="<?php out($shorter); ?>">
        <?php endif; ?>
        <?php if (isset($description)): ?>
        <meta name="description" content="<?php out($description); ?>">
        <?php endif; ?>
    </head>
    <body>
      <header>
        <div class="topbar" data-scrollspy="scrollspy" >
          <div class="topbar-inner">
            <div class="container">
              <nav>
                <ul class="nav">
                  <li><a href="http://www.dafyddvaughan.co.uk" title="return to the home page">Dafydd Vaughan</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <div id="page">
        <div class="container">
          <header>
            <h1><span><a href="/"><?php out(SITE_NAME); ?></a></span></h1>
          </header>
          <div id="content">
