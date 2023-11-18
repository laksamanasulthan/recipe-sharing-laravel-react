import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import NavLink from '@/Components/NavLink';
import { router } from '@inertiajs/react'
import { useState } from 'react'
// import { InertiaLink, useForm } from "@inertiajs/react";

export default function CardRecipe ({recipe, currentUser=null}) 
{
    const [values, setValues] = useState({
        user_id: currentUser,
        post_id: recipe.id,
    })

    const handleSubmit = (e) => {
        e.preventDefault();
        router.post('/like-recipe', values)
    };

    const unlike = (e) => {
        router.post('/unlike-recipe', values)
    };


    const destroy = (e) =>
    {
        router.delete(route("delete-recipe", recipe.id));     
    };

    return (
    <Card style={{ width: '18rem' }}>
      <Card.Img variant="top" src={`http://localhost:8000/photo/${recipe.photo}`} />
      <Card.Body>
        <Card.Title>
            <NavLink 
                href={route('inside-recipe', recipe.id)
            }>
                <h3>{recipe.judul}</h3>
            </NavLink>
        </Card.Title>
        <NavLink
            href={route('list-of-like', recipe.id)}
        >   
            <p>{recipe.post_has_many_likes_count} Orang Menyukai Post ini</p>
        </NavLink>

        <Card.Text>
            {
                (recipe.desc).length <= 25 
                    ? recipe.desc : `${(recipe.desc).slice(0, 100)}...`
            } 
        </Card.Text>
        <form name="likeSubmit" onSubmit={handleSubmit}>
            {

            }
            <Button type='submit' color='gray' variant="primary">Like</Button>&nbsp;
            <Button onClick={unlike} color='gray' variant="primary">Unlike</Button>&nbsp;

            { 
                recipe.recipe_user_id === currentUser ? 
                
                <Button 
                    key={recipe.id}
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