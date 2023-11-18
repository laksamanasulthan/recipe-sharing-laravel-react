import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import React, { useState } from 'react';
import { router } from '@inertiajs/react'
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';


export default function LandingRecipe({ auth }) {
    const [values, setValues] = useState({ // Form fields
        judul: "",
        desc: "",
        bahan: "",
        langkah: "",
        // upload: "",
    });

    // We will use function below to get
    // values from form inputs
    function handleChange(e) {
        const key = e.target.id;
        const value = e.target.value
        setValues(values => ({
            ...values,
            [key]: value,
        }))
    }

    // This function will send our form data to
    // store function of PostContoller
    function handleSubmit(e) {
        e.preventDefault();
        console.log(values);
        post(route('submit-recipe'));
    }

    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Create Recipe" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                     <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <br />
                            <h4 className="sm:px-8 lg:px-8">Tulis Resepmu</h4>
                            <Form onSubmit={handleSubmit} className="sm:px-8 lg:px-8">
                                <Form.Group className="mb-3" >
                                    <Form.Label htmlFor='judul'>Judul</Form.Label>
                                    <Form.Control id="judul" value={values.judul} onChange={handleChange} type="text" placeholder="title" />
                                </Form.Group>
                                <Form.Group className="mb-3" >
                                    <Form.Label htmlFor='desc' >Deskripsi</Form.Label>
                                    <Form.Control id="desc" value={values.desc} onChange={handleChange} as="textarea" rows={3} />
                                </Form.Group>
                                <Form.Group controlId="formFile" className="mb-3">
                                    <Form.Label>Upload Foto Masakan</Form.Label>
                                    <Form.Control type="file" />
                                </Form.Group>
                                <Button variant="primary" type="submit">
                                    Submit
                                </Button>     
                            </Form>
                            <br />
                        {/* <div className="p-6 text-gray-900">You're logged in!</div> */}
                         {/* <form onSubmit={handleSubmit}>
                            <label htmlFor="judul">Title:</label>
                            <input id="judul" value={values.judul} onChange={handleChange} />

                            <label htmlFor="desc">Body:</label>
                            <textarea id="desc" value={values.desc} onChange={handleChange}></textarea>

                            <label htmlFor="bahan">Title:</label>
                            <input id="bahan" value={values.bahan} onChange={handleChange} />

                            <label htmlFor="judul">Title:</label>
                            <input id="langkah" value={values.langkah} onChange={handleChange} />

                            <button type="submit">Create</button>
                        </form> */}
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}