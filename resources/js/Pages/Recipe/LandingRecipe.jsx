
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import CardRecipe from './Partials/CardRecipe';

export default function LandingRecipe({ auth, recipes, currentUser }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            // header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Recipe</h2>}
        >
            <Head title="Recipe" />

            <div className="py-12">
                <div className="cards max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">

                    { recipes && recipes.map( (item) => (
                        
                        <div className="col">
                            <CardRecipe
                            key={item.id}
                            recipe = {item}
                            currentUser={currentUser}
                        ></CardRecipe>
                        </div>
                        )) 
                    }
                </div>
            </div>

          
        </AuthenticatedLayout>
    );
}