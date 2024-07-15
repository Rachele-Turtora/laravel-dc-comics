export default function confirmDeletion() {
    const deleteForms = document.querySelectorAll(".form-delete");
    console.log(deleteForms);

    deleteForms.forEach(form => {
        form.addEventListener('submit', function (event) {
            // event.preventDefault();
            // console.log("Ho cliccato il bottone");
            // const userConfirmed = confirm('Sei sicuro di voler eliminare questo comic?');
            // if (userConfirmed) {
            //     console.log('Comic eliminato.');
            //     event.target.closest('form').submit();
            // }

            console.log("Ho cliccato il bottone");
            const userConfirmed = confirm('Sei sicuro di voler eliminare questo comic?');
            if (!userConfirmed) event.preventDefault();
        });
    })

}

