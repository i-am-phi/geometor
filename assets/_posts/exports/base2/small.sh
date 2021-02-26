mkdir 1920
 for f in *.png
 do   convert $f -resize 1920 small/$f
 done
