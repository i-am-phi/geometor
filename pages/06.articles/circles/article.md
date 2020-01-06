---
title: circles
author: /home
collection:
    name: Articles
    showCount: false
    showMenu: false
content:
    items: '@self.children'
child_type: article
taxonomy:
    category:
        - geometry
    tag:
        - foundation
        - circles
featured: false
---

- A CIRCLE is a perpendicular relationship between two points

___

In other words, A CIRCLE is a rotation of one point about the other.

Lines are "straight-forward" to consider. Circles just take you around and around.

like lines, circles are instantiated with twp points
Unlike lines, the two points are not interchangeable
one is defined and the **center point**, the other as the **radius point**

we use these points to derive the equation

- `(x - h)^2 + (y - k)^2 + r^2 = 0`


```js

// x offest
this.h = centerPoint.x;

// y offset
this.k = centerPoint.y;

//get radius length
this.r = centerPoint.distanceTo(radiusPoint);

// generate equation for circle
// (x - h)^2 + (y - k)^2 + r^2
this.eq = Algebrite.run( `clearall
  (x - (${this.h}))^2 + (y - (${this.k}))^2 - (${this.r})^2` );
// log("   eq: " + this.eq);

```

right now - the circle does not have the equivalent of a xRoot or yRoot expression in the object
this work is done in the intersection calculation

fairly straightforward until we get to the intersections
