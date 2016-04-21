# rsvp
Simple PHP server to demonstrate how Code RGV's always right URL works

# Getting Started

> # run server
> ./server
> 
> # test server
> curl -L http://localhost:8000             # no response
> curl -L http://localhost:8000/rsvp        # should redirect

Modify `index.php` based off of the [Spreadsheet]() and the [Google Apps Script]()


# Self-Update Mechanism
You can add a `onEdit` callback on your spreadsheet that calls your `/update` on your server.

> # test self-update
> curl -L http://localhost:8000/update