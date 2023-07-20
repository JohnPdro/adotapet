// Javascritp do infinite scroll ainda em teste

// const postContainer = document.getElementById('posts-container')
// const loading = document.querySelector('.loader');
// const filter = document.getElementById('filter');

// let limit = 4;
// let page = 1;

// async function getPosts() {
//     const res = await fetch(
//         `https://jsonplaceholder.typicode.com/posts?_limit=${limit}&_page=${page}`
//     );

//     const data = await res.json();

//     return data;
// }

// async function showPosts() {
//     const posts = await getPosts()
//     posts.forEach(post => {
//         const postEl = document.createElement('div');
//         postEl.classList.add('post');
//         postEl.innerHTML = `
//     <div class="col m-2">
//         <div class="card p-2" style="width: 20rem;">
//             <img src="../img/foto-gato.jpg" class="card-img-top" alt="...">
//             <div class="card-body">
//                 <h5 class="card-title">Card title</h5>
//                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//                 <a href="#" class="cor-btn-blocopets" data-bs-toggle="modal" data-bs-target="#exampleModal">Go somewhere</a>
//                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
//                     <div class="modal-dialog">
//                         <div class="modal-content">
//                             <div class="modal-header">
//                                 <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
//                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
//                             </div>
//                             <div class="modal-body">
//                                 ...
//                             </div>
//                             <div class="modal-footer">
//                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
//                                 <button type="button" class="btn btn-primary">Save changes</button>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     `;

//         postContainer.appendChild(postEl)
//     });
// }


// function filterPosts(e) {
//     const term = e.target.value.toUpperCase();
//     const posts = document.querySelectorAll('.post');

//     posts.forEach(post => {
//         const title = post.querySelector('.post-title').innerText.toUpperCase();
//         const body = post.querySelector('.post-body').innerText.toUpperCase();

//         if (title.indexOf(term) > -1 || body.indexOf(term) > -1) {
//             post.style.display = 'flex';
//         } else {
//             post.style.display = 'none';
//         }
//     });
// }
// showPosts()


// function showLoading() {
//     loading.classList.add('show');

//     setTimeout(() => {
//         loading.classList.remove('show')

//         setTimeout(() => {
//             page++;
//             showPosts();
//         }, 300);
//     }, 1000)
// }

// window.addEventListener('scroll', () => {
//     const { scrollTop, scrollHeight, clientHeight } = document.documentElement;

//     if (scrollTop + clientHeight >= scrollHeight - 5) {
//         showLoading()
//     }
// });



// filter.addEventListener('input', filterPosts)
