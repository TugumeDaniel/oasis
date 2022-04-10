function show_upload(){
    show_upload_btn=document.getElementById('show_upload_btn');
    upload_div=document.getElementById('uploadblog');
    show_write_btn=document.getElementById('show_write_btn');
    write_div=document.getElementById('writeblog');
    add_btn=document.getElementById('add_post');
    add_btn.disabled=false;
    show_upload_btn.disabled=true;
    upload_div.hidden=false;
    show_write_btn.disabled=false;
    write_div.hidden=true;
}

function show_write(){
    show_upload_btn=document.getElementById('show_upload_btn');
    upload_div=document.getElementById('uploadblog');
    show_write_btn=document.getElementById('show_write_btn');
    write_div=document.getElementById('writeblog');
    add_btn=document.getElementById('add_post');
    add_btn.disabled=false;
    show_upload_btn.disabled=false;
    upload_div.hidden=true;
    show_write_btn.disabled=true;
    write_div.hidden=false;
}