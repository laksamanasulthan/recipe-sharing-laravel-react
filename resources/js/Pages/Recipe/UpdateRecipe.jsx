
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import React, { useState } from 'react';
import { router, useForm, usePage } from '@inertiajs/react'
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';

export default function UpdateRecipe ({auth, recipe}) 
{
    // const { post } = usePage().props;
    const { data, setData, put } = useForm({
        judul: recipe.judul || null,
        desc: recipe.desc || null,
        bahan: recipe.post_has_many_ingredients[0].ingredients|| null,
        langkah: recipe.post_has_many_steps[0].step || null,
        photo: null,
    })

    const submit = (e) => {
        e.preventDefault()
        put(route("update-recipe", recipe.id));
        // router.put(route('update-recipe',recipe.id))
        console.log(data);
    }

     return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Update Recipe" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                     <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <br />
                                <h4 className="sm:px-8 lg:px-8">Tulis Resepmu</h4>
                                <Form onSubmit={submit} className="sm:px-8 lg:px-8">
                                    <Form.Group className="mb-3" >
                                        <Form.Label htmlFor='judul'>Judul</Form.Label>
                                        <Form.Control id='judul' name='judul' value={data.judul} onChange={e => setData('judul', e.target.value)} type="text" placeholder="title" />
                                    </Form.Group>
                                    <Form.Group className="mb-3" >
                                        <Form.Label htmlFor='desc' >Deskripsi</Form.Label>
                                        <Form.Control id="desc" name="desc" value={data.desc} onChange={e => setData('desc', e.target.value)} as="textarea" rows={3} />
                                    </Form.Group>
                                    <Form.Group className="mb-3" >
                                        <Form.Label htmlFor='bahan'>Bahan</Form.Label>
                                        <Form.Control value={data.bahan} onChange={e => setData('bahan', e.target.value)} as="textarea" rows={3}  />
                                    </Form.Group>
                                    <Form.Group className="mb-3" >
                                        <Form.Label htmlFor='langkah'>Langkah-Langkah</Form.Label>
                                        <Form.Control id="langkah" nama='langkah' value={data.langkah} onChange={e => setData('langkah', e.target.value)} as="textarea" rows={3} />
                                    </Form.Group>
                                    <Form.Group controlId="formFile" className="mb-3">
                                        <Form.Label>Upload Foto Masakan</Form.Label>
                                        <Form.Control id="photo" nama="photo" type="file" onChange={e => setData('photo', e.target.files[0])} />
                                    </Form.Group>
                                    <Button variant="primary" type="submit">
                                        Edit
                                    </Button>     
                                </Form>
                                <br />

                        <br />
                            
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );

}