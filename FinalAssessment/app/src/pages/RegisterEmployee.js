import React from 'react';
import { useState } from 'react'


const RegisterEmployee = ({register}) => {

    const [employee, setEmployee] = useState({
        name: "",
        contact_no: "",
        username: "",
        password: ""
    })

    const updateForm = (e) => {
        let emp = {...employee}
        emp[e.target.id] = e.target.value
        setEmployee(emp)
    }

    return (
        <div>
            <form>
                <input type="text" id="name" placeholder="Name" value={employee.name} onChange={updateForm} />
                <input type="text" id="contact_no" placeholder="Contact No" value={employee.contact_no} onChange={updateForm}  />
                <input type="text" id="username" placeholder="Username" value={employee.username} onChange={updateForm}  />
                <input type="password" id="password" placeholder="Password" value={employee.password} onChange={updateForm}  />
                <button type="submit" onClick={e => register(e, employee)}>Create</button>
            </form>
        </div>
    );
}

export default RegisterEmployee;
