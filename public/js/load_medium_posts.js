// Get posts from medium rss converted to json through rss2json.com
function loadMediumPosts() {
   fetch('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@sabesan96')
   .then((response) => response.json())
   .then((data) => {
      // Filter for actual posts. Comments don't have categories, thus they can be removed with that criteria
      const posts = data.items.filter(item => item.categories.length > 0); 

      // Insert posts if there are at least four, otherwise fallback to hiding that section
      if(posts.length >= 4) {
         // Format post values as html and insert them in page
         for(let i = 0; i < 4; i++) {
            const post = posts[i];
            const postHtml = getPostHtml(post.link, post.thumbnail, post.title, post.author);
            document.querySelector(`[data-medium-post-id='${i+1}']`).innerHTML = postHtml;
         }   
      }
      else {
         hidePosts();
      }
      
   })
   .catch((() => hidePosts()));
}

function getPostHtml(link, thumbnail, title, author) {
   postsHtml = `
      <div class="medium-post">
         <a href="${link}" class="medium-post-link texst-reset">
            <img src="${thumbnail}" class="medium-post-img rounded-lg"></img>
            <p class="medium-post-title text-center font-weight-bold">${title}</p>
         <a/>
         <p class="medium-post-author text-center">${author}</p>
      </div>`;
   return postsHtml;
}

function hidePosts() {
   document.getElementById("medium-posts-container").classList.add("d-none");
   document.getElementById("medium-posts-more-button").innerText = "Descubre nuestros artículos";
}