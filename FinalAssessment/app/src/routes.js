const base = 'http://127.0.0.1:8000'
const routes = {
    registerEmployee: `${base}/api/employee/register`,
    getAllEmployees: `${base}/api/employee/getAll`,
    getEmployee: (id => `${base}/api/employee/${id}`),
    editEmployee: `${base}/api/employee/edit`,
    deleteEmployee: (id => `${base}/api/employee/delete/${id}`),
    searchEmployee: (txt => `${base}/api/employee/search/${txt}`),
    createProduct: `${base}/api/product/create`,
    editProduct: `${base}/api/product/edit`,
    deleteProduct: (id => `${base}/api/product/delete/${id}`)
}
export default routes