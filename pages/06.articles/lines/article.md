---
title: lines
taxonomy:
    category:
        - geometry
    tag:
        - foundation
        - lines
featured: false
author: /home
---

- A LINE is a proportion that is derived from the relationship of two points

===


Proportion is relative to the baseline / grid

Infinite Series of Points?

A point on a line cannot be known unless the line intersects another element.
Anything else is speculation.

Explorer generates the equation for the line in line in two forms

- `ax + by + c = 0`
- `y = mx + n`

A new `Line` object is instantiated with two points. These points are used to derive the coefficients of the equations.



```js

//calculate equation 1 coefficients
// ax + by + c form
var cmd = `clearall
a = (${pt1.y}) - (${pt2.y})
a
b = (${pt2.x}) - (${pt1.x})
b
c = ((${pt1.x}) * (${pt2.y})) - ((${pt2.x}) * (${pt1.y}))
c
eq = (a) * x + (b) * y + (c)
eq
`;

// run script and parse result
// returns a, b, c, eq
var result = alg(cmd).split("\n");

this.a = result[0];
this.b = result[1];
this.c = result[2];
this.eq = result[3];

//calculate equation 1 coefficients
// y = mx + n form
// var bVal = getNumber(this.b);
if (this.b != "0") {

  var cmd = `
  m = -(a) / (b)
  m
  n = -(c) / (b)
  n
  eq2 = m * x + n
  eq2
  `;

  // run script and parse result
  // returns m, n, eq2
  var result = alg(cmd).split("\n");

  this.m = result[0];
  this.n = result[1];
  this.eq2 = result[2];

}

// set xRoot if not horizontal
if (this.a != 0) {
  this.xRoot = alg( `roots(eq, x)` );
} else {
  // leave undefined
}

// set yRoot if not vertical
if (this.b != 0) {
  this.yRoot = alg( `roots(eq, y)` );
} else {
  // leave undefined
}
```

I am treating Algebrite as a secondary scripting engine within **Explorer**.

The only reason I am parsing the coefficient values out of Algebrite is to display on the screen. The primary concern is finding the roots of the equations.

The `xRoot` and `yRoot` are used in the `getX` and `getY` functions when determining intersection points

```js
//////////////////////////////////////////////
// get y value for corresponding x
this.getY = function(x) {
  var y, deg;
  if (this.yRoot) {
    deg = alg( `deg(${this.yRoot})` );
    if (deg == 1) {
      y = alg( `subst((${x}), x, (${this.yRoot}))` );
    } else {
      y = this.yRoot;
    }
  } else {
    // y is undefined
  }
  return y;
}

// get x value for corresponding y
this.getX = function(y) {
  var x, deg;
  if (this.xRoot) {
    deg = alg( `deg(${this.xRoot})` );
    if (deg == 1) {
      x = alg( `subst((${y}), y, (${this.xRoot}))` );
    } else {
      x = this.xRoot;
    }
  } else {
    // x is undefined
  }
  return x;
}

```
