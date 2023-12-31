import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import React, { useState } from 'react';
import NavLink from '@/Components/NavLink';
import Card from 'react-bootstrap/Card';


export default function InsideRecipe ({auth, recipe, currentUser}) 
{
    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Create Recipe" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                     <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <br />
                        <div className="sm:px-8 lg:px-8">
                            {
                                recipe.recipe_user_id === currentUser ? 
                                  <NavLink href={route('edit-recipe', recipe.id)}>Edit This Article </NavLink>
                                : <></>
                            }
                          
                            <Card.Img variant="top" src={`http://localhost:8000/photo/${recipe.photo}`} />
                            <h2>{recipe.judul}</h2>
                            <p>{recipe.desc}</p>
                            <p>{recipe.post_has_many_ingredients.ingredients}</p>
                            <h4>Bahan-Bahan</h4>
                            { recipe.post_has_many_ingredients.map( (item) => (
                                <pre
                                    key={item.id} 
                                    className="col"
                                >
                                    {item.ingredients}
                                </pre>
                                )) 
                            }
                            <p></p>
                            <h4>Langkah Pembuatan</h4>
                            { recipe.post_has_many_steps.map( (item) => (
                                <pre
                                    key={item.id} 
                                    className="col
                                ">
                                    {item.step}
                                </pre>
                                )) 
                            }
                            <br />
                        </div>     
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}