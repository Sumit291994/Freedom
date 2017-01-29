var request = require('request');
    cheerio = require('cheerio');
	fs = require('');
	
	var urls = new Array;
	request('http://www.reddit.com/', function(err,resp,body) {
		if (!err && resp.statusCode == 200) { 
			var $ = cheerio.load(body);
			var $ = cheerio.load(body);
			$('a.title','#siteTable').each(function() {
				console.log(this);
				var url= this.attribs['href'];
				if(url.indexOf('i.imgur.com')!=-1){
					urls.push(url);
				} 
			});
		
		console.log(urls);
		for(var i=0; i< urls.length;i++)
		{ 
			request(urls[i]).pipe(fs.createWriteStream('img/'+ i +'.jpg'));
		}																					
	}
});
		
		