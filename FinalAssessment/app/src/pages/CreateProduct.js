import React from 'react';
import { useState } from 'react';

const CreateProduct = (create) => {
    const [product, setProduct] = useState({
        name: "",
        quantity: 0,
        price: 0
    })

    const updateForm = (e) => {
        let pr = {...product}
        pr[e.target.id] = e.target.value
        setProduct(pr)
    }

    return (
        <div>
            <form>
                <input type="text" id="name" placeholder="Name" value={product.name} onChange={updateForm} />
                <input type="number" id="quantity" placeholder="Quantity" value={product.contact_no} onChange={updateForm}  />
                <input type="price" id="price" placeholder="Price" value={product.username} onChange={updateForm}  />
                <button type="submit" onClick={e => create(e, product)}>Create</button>
            </form>
        </div>
    );
}

export default CreateProduct;
