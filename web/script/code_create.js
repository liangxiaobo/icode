$(function(){
	$("#codecontent-content").bind("keydown", function(e){
	  if (event.keyCode == 9) {
	    e.preventDefault();
	    var start = this.selectionStart;
	    var end = this.selectionEnd;
	    var indent = "\u0020\u0020\u0020\u0020";

	    var selectedTxt = window.getSelection().toString();
	    selectedTxt = indent + selectedTxt.replace(/\n/g,'\n'+indent);

	    $(this).val($(this).val().substring(0,start) + selectedTxt + $(this).val().substring(end));
	    this.setSelectionRange(start+indent.length,start+selectedTxt.length);
	  }
	});

	$("#codecontent-content").bind("keyup", function(e){

	  // 替换字符串
	  var txt_all = $(this).val().replace(/</g, "&lt;")
	  .replace(/>/g, "&gt;")
	  .replace(/&lt;pre.*&gt;/, "<pre>")
	  .replace(/&lt;\/pre&gt;/, "</pre>")
	  .replace(/&lt;code.*&gt;/, "<code>")
	  .replace(/&lt;\/code&gt;/, "</code>");
	  console.log(txt_all);

	  $(this).val(txt_all);
	  
	});
});