        <div class="navbar">
          <div class="navbar-inner">
			      <div class="left sliding"><a href="mainf7.php<?php print $uend; ?>" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">iChanger - Upload Test</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
<div class="pages navbar-through">
<div data-page="home" class="page">
<div class="page-content">
Start Hello
<form action="getfile.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
    <input type="submit" value="Upload Image" name="submit">
</form>
</div>
</div>
</div>
