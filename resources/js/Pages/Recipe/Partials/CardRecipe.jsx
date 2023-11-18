import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import NavLink from '@/Components/NavLink';
import { router } from '@inertiajs/react'

export default function CardRecipe ({post, currentUser=null}) 
{
    const handleSubmit = (e) => {
        e.preventDefault();
        router.post(route("like-recipe"));
    };

    const destroy = (e) =>
    {
        router.delete(route("delete-recipe", post.id));     
    };

    return (
    <Card style={{ width: '18rem' }}>
      <Card.Img variant="top" src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" />
      <Card.Body>
        <Card.Title>
            <NavLink href={route('inside-recipe', post.id)}>
                <h3>{post.judul}</h3>
            </NavLink>
        </Card.Title>
        
        <p>{post.post_has_many_likes_count} Orang Menyukai Post ini</p>
        <Card.Text>
            {
                (post.desc).length <= 25 
                    ? post.desc : `${(post.desc).slice(0, 100)}...`
            } 
        </Card.Text>
        <form name="likeSubmit" onSubmit={handleSubmit}>
            <input type="hidden" id="post_id"  value={post.id}></input>
            <input type="hidden" id="user_id"  value={currentUser}></input>
            <Button type='submit' color='gray' variant="primary">Like</Button>&nbsp;&nbsp;

            { 
                post.recipe_user_id === currentUser ? 
                
                <Button 
                    key={post.id}
                    color='gray' 
                    variant="primary"
                    onClick={destroy}
                >
                        Delete
                </Button>
                
                
                : null
            }
         </form>
      </Card.Body>
    </Card>

    
        
    );
}