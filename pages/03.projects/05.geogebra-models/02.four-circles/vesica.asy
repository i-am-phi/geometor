 /* Geogebra to Asymptote conversion, documentation at artofproblemsolving.com/Wiki go to User:Azjps/geogebra */
import graph; size(5.cm); 
real labelscalefactor = 0.5; /* changes label-to-point distance */
pen dps = linewidth(0.7) + fontsize(10); defaultpen(dps); /* default pen style */ real xmin = -2.5, xmax = 2.5, ymin = -1.25, ymax = 1.3074925905236503;  /* image dimensions */
pen ffxfqq = rgb(1.,0.4980392156862745,0.); 
 /* draw figures */
draw((xmin, 0.*xmin0.)--(xmax, 0.*xmax0.), linewidth(2.) + white); /* line */
draw(circle((-0.5,0.), 1.), linewidth(2.) + dotted + white); 
draw(circle((0.5,0.), 1.), linewidth(2.) + dotted + white); 
draw((0.,ymin)--(0.,ymax), linewidth(2.) + linetype("0 3 4 3") + white); /* line */
 /* dots and labels */
dot((-0.5,0.),ffxfqq); 
label("$A$", (-0.5576954677439179,0.034145234171913404), NE * labelscalefactor,ffxfqq); 
dot((0.5,0.),ffxfqq); 
label("$B$", (0.5286568222904331,0.031177058516081848), NE * labelscalefactor,ffxfqq); 
label("baseline", (-2.3949961987036534,0.02524070720441874), NE * labelscalefactor,white); 
label("$c01$", (-1.029635397021136,0.7732209724739705), NE * labelscalefactor,white); 
label("$c02$", (0.16357121662315116,0.8800752960839064), NE * labelscalefactor,white); 
dot((0.,0.8660254037844386),linewidth(4.pt) + white); 
label("$p01$", (0.021098785143236293,0.9364706335447059), NE * labelscalefactor,white); 
dot((0.,-0.8660254037844387),linewidth(4.pt) + white); 
label("$p02$", (0.021098785143236293,-0.9661299618433205), NE * labelscalefactor,white); 
label("$i02$", (-0.026392025350068668,1.2392245504395245), NE * labelscalefactor,white); 
dot((0.,0.),linewidth(4.pt) + white); 
label("$p03$", (0.03297148776656253,0.028208882860250296), NE * labelscalefactor,white); 
clip((xmin,ymin)--(xmin,ymax)--(xmax,ymax)--(xmax,ymin)--cycle); 
shipout(bbox(black,Fill)); 
 /* end of picture */