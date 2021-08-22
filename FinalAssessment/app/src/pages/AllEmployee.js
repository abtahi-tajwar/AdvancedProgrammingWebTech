import React from 'react';
import routes from '../routes';
import { useState, useEffect } from 'react'

const AllEmployee = () => {
    
    const [employees, setEmployees] = useState([])

    useEffect(() => {
        (async () => {
            var res = await fetch(routes.AllEmployee);
            var data = await res.json();
            setEmployees(data)
        })()
    }, [])

    const deleteEmployee = async (id) => {
        (async () => {
            var res = await fetch(routes.deleteEmployee(id));
            var data = await res.json();
            setEmployees(data)
        })()
    }

    var AllEmployees = employees.map(emp => 
        <tr key={emp.id}>
            <td>${emp.name}</td>
            <td><button id={emp.id}>Edit</button></td>
            <td><button id={emp.id} onClick={id => deleteEmployee(emp.id)}>Delete</button></td>
        </tr>
    );
    return (
        <div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                {AllEmployees}
            </table>
        </div>
    );
}

export default AllEmployee;
