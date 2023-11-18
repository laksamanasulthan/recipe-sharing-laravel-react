
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import CardRecipe from './Partials/CardRecipe';

export default function LikeRecipe({ auth, recipe}) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            // header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Recipe</h2>}
        >
            <Head title="Recipe" />

            <div className="py-12">
                <div className="cards max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="sm:px-8 lg:px-8">
                            <h3>{recipe.judul}</h3>
                            <p>Created At : {recipe.created_at}</p>
                            {/* <p>Author : {recipe.post_belongs_to_user}</p> */}
                            <p>Liked by : </p>
                            { recipe.post_has_many_likes.map( (item) => (
                                
                                <li>{item.recipe_user_id}</li>
                                )) 
                            }
                        </div>
                    </div>
                </div>
            </div>

          
        </AuthenticatedLayout>
    );
}