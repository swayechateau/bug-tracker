<!doctype html>
<!--

  Instructions:

  - Save this file.
  - Replace "USER" with your GitHub username.
  - Replace "REPO" with your GitHub repo name.
  - Replace "Your Project" with your project name.
  - Upload this file (or commit to GitHub Pages).

  Customize as you see fit!

-->
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">

  <title>Project Tracker</title>

  <!-- Flatdoc -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/legacy.js'></script>
  <script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/flatdoc.js'></script>

  <!-- Flatdoc theme -->
  <link  href='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/style.css' rel='stylesheet'>
  <script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/script.js'></script>

  <!-- Meta -->
  <meta content="Project Tracker - Api Docs" property="og:title">
  <meta content="Documentation on project trackers open Api" name="description">

  <!-- Initializer -->
  <script>
    Flatdoc.run({
      fetcher: Flatdoc.file('ApiDoc.md')
    });
  </script>
</head>
<body role='flatdoc'>

  <div class='header'>
    <div class='left'>
      <h1>Project Tracker</h1>
      <ul>
        <li><a href='https://github.com/swayechateau/project-tracker'>View on GitHub</a></li>
        <li><a href='https://github.com/swayechateau/project-tracker/issues'>Issues</a></li>
      </ul>
    </div>
    <div class='right'>
      <!-- GitHub buttons: see http://ghbtns.com -->
      <iframe src="http://ghbtns.com/github-btn.html?user=swayechateau&amp;repo=project-tracker&amp;type=watch&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
    </div>
  </div>

  <div class='content-root'>
    <div class='menubar'>
      <div class='menu section' role='flatdoc-menu'></div>
    </div>
    <div role='flatdoc-content' class='content'></div>
  </div>

</body>
</html>
