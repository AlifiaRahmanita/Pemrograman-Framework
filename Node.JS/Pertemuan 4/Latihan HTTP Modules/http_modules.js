if(url === '/about'){
    fstat.readfile('./html/about.html', 'utf-8', (e, data)=>{
        if(e){
            res.writeHead(404);
            res.write("File not found");
        }else{
            res.write(data)
        }
        res.end();
    });
}