Elements create new points through intersections


Points are the babies of elements
Elements are the parents of points
Intersection is an act of creation

There are three possible intersection types:

- line - line
- line - circle
- circle - circle

many elements within the field will not intersect

intersections of lines will always be a single point
when circles intersect with lines or circles they may generate one or two points

lines are parallel when they share the same proportion
circles are "parallel" when they share the same center.

## Line - Line

First check for parallel lines

the test of the first line is vertical

right now - the intersection is reparsing values that are already in Algebrite

the code should directly subtract one equation from another

```js

function intersectLineLine (line1, line2) {
  // log("  > intersect: l1:" + line1.id + " l2:" + line2.id);
  var x, y;

  if (line1.m == line2.m) {
    //lines are parallel;
    return;
  }

  var test1 = alg(`(${line1.a}) * (${line2.b})`)
  var test2 = alg(`(${line2.a}) * (${line1.b})`)

  if ( test1 == test2 ) {
    //lines are parallel;
    return;
  }

  //check if line1 is vertical
  if ( line1.b !== "0") {
    x = alg(`( (${line2.b}) * (${line1.c}) - (${line1.b}) * (${line2.c}) )/( (${line2.a}) * (${line1.b}) - (${line1.a}) * (${line2.b}) )`);
    y = line1.getY(x);
    addPoint(x, y, line1, line2);
  } else {
    //line is vertical
    // log("   l1:" + line1.id + " vertical\n");
    x = '0'; //TODO: i think this needs to be a / c
    y = line2.getY(x);
    addPoint(x, y, line1, line2);

  }
}


```

## Line Circle



```js

function intersectLineCircle (line, circle) {

  // log("  > intersect: l:" + line.id + " c:" + circle.id);
  var r = circle.r;
  var h = circle.h;
  var k = circle.k;

  if ((line.xRoot)) {
    // if not vertical solve for y
    alg(`
    C = ${circle.eq}
    L = ${line.xRoot}
    S = subst(L,x,C)`);

    var deg = alg(`deg(S)`);

    var x, y;

    // TODO: get roots as array
    for (var i = 1; i <= deg; i++) {
      y = alg(`roots(S, y)[${i}]`);
      x = line.getX(y);
      if (checkValid(x) && checkValid(y)) {
        log("    > add circle intersection: " + x + ", " + y);
        addPoint(x, y, line, circle);
      } else {
        log(`    not a valid point: [${x}, ${y}]`);
      }

    }

  } else {
    // if vertical solve for x
    alg(`
    C = ${circle.eq}
    L = ${line.yRoot}
    S = subst(L,y,C)`);

    var deg = alg(`deg(S)`);

    var x, y;

    // TODO: get roots as array
    for (var i = 1; i <= deg; i++) {
      x = alg(`roots(S, x)[${i}]`);
      y = line.getY(x);

      if (checkValid(x) && checkValid(y)) {
        log("    > add circle intersection: " + x + ", " + y);
        addPoint(x, y, line, circle);
      } else {
        log(`    not a valid point: [${x}, ${y}]`);
      }
    }
  }
}


```



## Circle Circle

need a proper test for when circles do not intersect

```js

function intersectCircleCircle(c1, c2) {
  log("  > intersect: c1:" + c1.id + " c2:" + c2.id);

  // Algebrite Script
  var cmd = `
  C1 = ${c1.eq}
  C2 = ${c2.eq}
  # subtract two circle equations
  # this should provide a linear equation
  S = C1 - C2

  # solve this equation for x
  X = roots(S, x)

  # substitute this x value into a circle equation
  Y = subst(X, x, C1)

  # solve for y
  roots(Y, y)
`;

  var result = alg(cmd);

  if ( checkValid(result) ) {
    var yRoots = result.replace("[", "").replace("]", "").split(",");

    // substitute each y value into the linear equation
    yRoots.forEach( function(y) {
      var x = alg(`subst(${y}, y, X)`);

      //check values
      if (checkValid(x) && checkValid(y)) {
        log("    > add circle intersection: " + x + ", " + y);
        addPoint(x, y, c1, c2);
      } else {
        log(`    not a valid point: [${x}, ${y}]`);
      }
    })

  } else {

    // solve for x-roots
    cmd = `
    C1 = ${c1.eq}
    C2 = ${c2.eq}
    # subtract two circle equations
    # this should provide a linear equation
    S = C1 - C2

    Y = roots(S, y)
    X = subst(Y, y, C1)
    roots(X, x)
    `;

    var result = alg(cmd);

    if ( checkValid(result) ) {
      var xRoots = result.replace("[", "").replace("]", "").split(",");

      xRoots.forEach( function(x) {
        var y = alg(`subst(${x}, x, Y)`);
        //check values
        if (checkValid(x) && checkValid(y)) {
          log("    > add circle intersection: " + x + ", " + y);
          addPoint(x, y, c1, c2);
        } else {
          log(`    not a valid point: [${x}, ${y}]`);
        }
      })
    }
  }

}

```
