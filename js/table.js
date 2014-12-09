    window.onload=function(){
    var tables = document.getElementsByClassName('tftable');
    var tbRow=[];
    
    for (var j=0;j<tables.length;j++) {
        var tfrow = tables[j].rows.length;
        for (var i=0;i<tfrow;i++) {
            tbRow[i]=tables[j].rows[i];
            tbRow[i].onmouseover = function(){
              this.style.backgroundColor = '#ffffff';
            };
            tbRow[i].onmouseout = function() {
              this.style.backgroundColor = '#d4e3e5';
            };
        }
    }
};