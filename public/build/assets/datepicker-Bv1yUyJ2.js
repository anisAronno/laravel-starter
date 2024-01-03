const e=`
  <input class="input input-date-range-disabled" type="text" placeholder="YYYY-MM-DD">

  <script>
    import flatpickr from "flatpickr";

    const fromDate  = new Date(Date.now() + 3600 * 1000 * 24);
    const toDate    = new Date(Date.now() + 3600 * 1000 * 168);

    const disabledDatepicker = flatpickr('.input-date-range-disabled', {
      dateFormat: 'Y-m-d',
      disable: [
        {
          // Disable from tomorrow to next 7 days
          from: fromDate.toISOString().split('T')[0],
          to: toDate.toISOString().split('T')[0]
        }
      ]
    })
  <\/script>
`,t=`
  <input class="input input-date-custom" type="text" placeholder="YYYY-MM-DD">

  <script>
    import flatpickr from "flatpickr";

    const customDatepicker = flatpickr('.input-date-custom', {})
  <\/script>
`,r=createCodeViewer("#disabled-datepicker-code-viewer",e),i=createCodeViewer("#custom-datepicker-code-viewer",t);r.render();i.render();
