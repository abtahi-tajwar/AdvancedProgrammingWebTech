import React from 'react';
import { Link } from 'react-router-dom';
const Header = () => {
    return (
        <div>
            <ul>
                <Link to="/"><li>All Employees</li></Link>
                <Link to="/employee/register"><li>Register Employees</li></Link>
                <Link to="/employee/edit/1"><li>Edit Employees</li></Link>
                <Link to="/product/create"><li>Add Product</li></Link>
            </ul>
        </div>
    );
}

export default Header;
