		<div style="background-color:transparent;margin:0 auto;padding:0;position:relative;text-align:left;width:980px;">
			<div style="background:transparent none repeat scroll 0 0;height:8em;margin:7px 0 14px;padding:1em;">
				<div style="width:100%">	
					<h1 style="font-family:'PT+Sans&subset=latin',Helvetica,Verdana,Arial,Sans-Serif;font-size:4em;margin:0 0 0 8px;">
					<a style="background:transparent none repeat scroll 0 0;color:#444444;outline-color:-moz-use-text-color;outline-style:none;outline-width:medium;text-decoration:none;" title="table fixed header" href="http://www.tablefixedheader.com/">table fixed header</a></h1>
					<div style="color:#444444;font-family:'Lobster',Helvetica,Verdana,Arial,Sans-Serif;font-size:1.3em;margin:0.5em 0 0 8px;">A client-side jQuery plugin to transform your HTML table </div>
				</div>
			</div>
		</div>
		
		 
		<div class="themes">
			<h2>UI Themes</h2>
			<button id="flick">FLICK</button><br/>
			<button id="lightness">UI-LIGHTNESS</button><br/>	
			<button id="redmond">REDMOND</button><br/>
			<button id="smoothness">SMOOTHNESS</button><br/>
			<br/>
			<h2>Examples</h2>
			<div id="links"><a class="top" href="#">Back to the top</a><br/></div>
		</div>
		<br/>
		
		<!--  EXAMPLES -->
		
		<div style="position : relative; left : 50%; margin-left : -490px; width : 980px;">
		
			<h2 style="font-family:Helvetica,Verdana,Arial,Sans-Serif;color:#444444;font-size:2.7em;font-weight:normal;letter-spacing:-0.05em;margin:0 0 0.5em;">Fullpage demo</h2>
			<div style="border-top:2px solid #F1F2F4;padding:1em 0 0.5em;"></div>
			<!--  THE EXAMPLE -->
			
			<table class="resultset" id="0"></table>
			<pre><code class="javascript">
 $('#0').fixheadertable({
    caption     : 'My employees (200)', 
    colratio    : [100, 150, 150, 150, 220, 150], 
    height      : 300, 
    width       : 960, 
    zebra       : true, 
    sortable    : true,
    sortedColId : 1, 
    resizeCol   : true,
    pager       : true,
    rowsPerPage : 10,
    sortType    : ['integer', 'string', 'string', 'string', 'string', 'date'],
    dateFormat  : 'm/d/Y'
});
		</code></pre>		
		<br/><br/>
		
		<div style="border-top : 3px dashed black">&nbsp;</div>