export default function CardRecipe ({post}) 
{
    return (
        <>
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="..."></img>
            <div class="card-body">
                <h5 class="card-title">{post.judul}</h5>
                <p>Like : {post.post_has_many_likes_count}</p>
                <p class="card-text">{post.desc}</p>
                <a href="#" class="btn btn-primary">Suka</a>
            </div>
        </div>
        </>
        
    );
}