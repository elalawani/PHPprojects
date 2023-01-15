
const addForm = document.getElementById('add-user-form');
const updateForm = document.getElementById('edit-user-form');
const showAlert = document.getElementById('showAlert');
const addModal = new bootstrap.Modal(document.getElementById('addNewUser'));
const editModal = new bootstrap.Modal(document.getElementById('editUser'));
const tbody = document.querySelector('tbody');

addForm.addEventListener('submit',async (e) =>{
    e.preventDefault();

    const formDate = new FormData(addForm);
    formDate.append('add', 1);

    if (!addForm.checkValidity()){
        e.preventDefault();
        e.stopPropagation();
        addForm.classList.add('was-validated');
        return false;
    }else {
        document.getElementById('add-user-btn').value = 'please wait ...';

        const data = await fetch('action.php', {
            method: 'POST',
            body: formDate
        });
        const response = await data.text();
        showAlert.innerHTML = response;
        document.getElementById('add-user-btn').value = 'Send';
        addForm.reset();
        addForm.classList.remove('was-validated');
        addModal.hide();
        await fetchAllUsers();
    }
});

const fetchAllUsers = async () => {
    const data = await fetch('action.php?read=1', {
        method: 'GET',
    });
    const response = await data.text();
    tbody.innerHTML = response;

}
fetchAllUsers();

tbody.addEventListener('click', (e)=>{
    if (e.target && e.target.matches('a.editLink')) {
        e.preventDefault();
        let id = e.target.getAttribute('id');
        editUser(id);
    }
});

const editUser = async (id) => {
    const data = await fetch(`action.php?edit=1&id=${id}`, {
        method: "GET",
    });
    const response = await data.json();
    document.getElementById("id").value = response.id;
    document.getElementById("fname").value = response.first_name;
    document.getElementById("lname").value = response.last_name;
    document.getElementById("email").value = response.email;
    document.getElementById("phone").value = response.phone;
};

updateForm.addEventListener('submit',async (e) =>{
    e.preventDefault();

    const formDate = new FormData(updateForm);
    formDate.append('update', 1);

    if (!updateForm.checkValidity()){
        e.preventDefault();
        e.stopPropagation();
        updateForm.classList.add('was-validated');
        return false;
    }else {
        document.getElementById('edit-user-btn').value = 'please wait ...';

        const data = await fetch('action.php', {
            method: 'POST',
            body: formDate
        });
        const response = await data.text();
        showAlert.innerHTML = response;
        document.getElementById('edit-user-btn').value = 'update';
        updateForm.reset();
        updateForm.classList.remove('was-validated');
        editModal.hide();
        await fetchAllUsers();
    }
});

tbody.addEventListener('click', (e)=>{
    if (e.target && e.target.matches('a.deleteLink')) {
        e.preventDefault();
        let id = e.target.getAttribute('id');
        deleteUser(id);
    }
});

const deleteUser = async (id) => {
    const data = await fetch(`action.php?delete=1&id=${id}`, {
        method: "GET",
    });
    const response = await data.text();
    showAlert.innerHTML = response;
    fetchAllUsers();
}