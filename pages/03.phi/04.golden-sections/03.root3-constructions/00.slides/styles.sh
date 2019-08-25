# ls *.svg
sed -i '4 a\
  <style>\
    .point {\
      stroke: red;\
    }\
  <\/style>' test.svg
