/*
 * Personalization markers plugin for ckeditor
 * 
 * @author: dave.jay@goldbar.net
 * @since: June 27, 2013
 * @usees richcombo
 * 
 * 
 */

CKEDITOR.plugins.add( 'markers', {
    requires: 'richcombo',
    init: function( editor ) {
	if ( editor.blockless )
	    return;
	
	var config = editor.config

	/**
	 * 
	 * Inline function to add combo to ckeditor
	 * Expects an id, label and dataSource in the form of array
	 * 
	 * dave.jay@goldbar.net
	 * June 27, 2013
	 * 
	 */ 
	var addCombo  = function (id,comboLabel,dataSource){
	
	    editor.ui.addRichCombo( id, {
		label: comboLabel,
		title: comboLabel,
		toolbar: 'paragraph',
		panel: {
		    css: [ CKEDITOR.skin.getPath( 'editor' ) ].concat( config.contentsCss ),
		    multiSelect: false,
		    attributes: {
			'aria-label': comboLabel
		    }
		},
		init: function() {
		    // save this variable to use into jQuery.each variable
		    var self = this;
		    
		    // inline function to add items into combo-box
		    var addItem = function(value,label){
			self.add(value,label,label);
		    }
		    
		    // iterate through datasource and additesms
		    try{
			if(dataSource.length > 0 ){
			    jQuery.each(dataSource,function(k,v){
				addItem(v[0],v[1]);
			    })
			}
		    }catch(e){
		    // do nothing
			
		    }
		},

		onClick: function( value ) {
		    //editor.insertHtml(value);
		    if(id == 'creativeMarkers'){
			// create ajax call and replace the content
			
			
		    }else{
			editor.insertHtml(value);
		    }
		}
	    });
	}
	
	// Finally, add a combobox to files
	addCombo('markers','Personalizatoin Markers',editor.config.markersData);
	
	// For Message toolbar, we have two comboboxes
	// add another combobox for Message toolbar
	try{
	    //console.log("tbarset is " + editor.config.tBarSet); 
	    
	    if(editor.config.tBarSet == 'Message'){
		addCombo('adMarkers','Advertisement Codes',arrAdItems);    
		//addCombo('creativeMarkers','Email Creatives',arrCreativesItems);    
	    }
	}catch(e){
	// do nothing on production
	//console.log(e);
	}
    }
});
