
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';


export default function LandingRecipe({ auth, posts }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            // header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Recipe</h2>}
        >
            <Head title="Recipe" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                    { posts && posts.map( (item) => (
                            <div key={item.id}>
                                <h2>Judul : {item.judul}</h2>
                                <h2>Like : {item.post_has_many_likes_count} </h2>
                                <p>Deskripsi : {item.desc}</p>
                            </div>
                        )) 
                    }
                </div>
            </div>
        </AuthenticatedLayout>
    );
}