// Get posts from medium rss converted to json through rss2json.com
fetch('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@sabesan96')
   .then((res) => res.json())
   .then((data) => {
      // Filter for actual posts. Comments don't have categories, therefore can filter for items with categories bigger than 0
      const posts = data.items.filter(item => item.categories.length > 0) 

      // Format post values as html
      for(let i = 1; i <= 4; i++) {
         const post = posts[i];
         const postHtml = getPostHtml(post.link, post.thumbnail, post.title, post.author)
         document.querySelector(`[data-medium-post-id='${i}']`).innerHTML = postHtml;
      }   
   })
   .catch((err => console.log(err)));

function getPostHtml(link, thumbnail, title, author) {
   postsHtml = `
      <div class="medium_post">
         <a href="${link}">
            <img src="${thumbnail}" class="medium_post_img rounded-lg"></img>
            <h2 class="medium_post_title text-center ">${title}</h2>
         <a/>
         <p class="medium_post_author text-center ">${author}</p>
      </div>`;
   return postsHtml;
}