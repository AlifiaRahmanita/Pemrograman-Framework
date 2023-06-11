const http = require('http');
const port = 3030;
const server = http.createServer((req, res)=>{
// header digunakan untuk memberikan informasi tambahan respon dari server
    res.writeHead(200, {
        'Content-Type': 'text/html'
    });
    //res.write('Hello Response');
    const url = req.url;
    if(url === '/about'){
        res.write("Ini adalah halaman About");
    }else if(url === '/contact'){
        res.write("Ini adalah halaman Contact");
    }else{
        res.write("ini adalah halaman Default")
    }
    res.end();
});

server.listen(port, ()=>{
    console.log("Server is listening on port : ", port);
})