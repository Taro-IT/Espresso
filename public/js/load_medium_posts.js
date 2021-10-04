// Get posts from medium rss converted to json through rss2json.com
fetch('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@sabesan96')
   .then((res) => res.json())
   .then((data) => {
      // Filter for actual posts. Comments don't have categories, therefore can filter for items with categories bigger than 0
      const posts = data.items.filter(item => item.categories.length > 0) 

      // Format post values as html
      let postsHtml = '';
      posts.forEach((item) => {
         // Remove image caption from content
         figureStart = item.content.search("<figure>");
         figureEnd = item.content.search("</figure>");
         if(figureStart != -1 && figureEnd != -1) {
            item.content = item.content.substring(0, figureStart) + item.content.substring(figureEnd + 9);
         }

         postsHtml += `
         <div class="post">
            <a href="${item.link}">
               <img src="${item.thumbnail}" class="post_img"></img>
               <div class="post_content">
                  <div class="blog_preview">
                     <h2 class="post_title">${item.title}</h2>
                     <p class="post_intro">${shortenText(toText(item.content), 100) + "..."}</p>
                  </div>
                  <hr>
                  <div class="post_info">
                     <p class="post_author">${item.author}</p>
                     <p class="post_date">${shortenText(item.pubDate, 10)}</p>
                  </div>
               </div>
            <a/>
         </div>`;
      }) 
      document.querySelector('.posts_container').innerHTML = postsHtml;
   })
   .catch((err => console.log(err)));

// Remove html tags from a string
function toText(node) {
   let tag = document.createElement('div')
   tag.innerHTML = node;
   node = tag.innerText;
   return node;
}

// Trim the end of a string to make it shorter or equal to a length
function shortenText(text, maxLength) {
   if(text.length > maxLength) {
      return text.substring(0, maxLength);
   }
   return text;
}