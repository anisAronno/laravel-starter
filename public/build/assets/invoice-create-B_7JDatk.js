import{f as r}from"./app-BHHSBNjI.js";const l=document.querySelector("#table-products"),o=document.querySelector("#btn-add-item"),n=document.querySelectorAll(".btn-remove-item"),i=`
  <tr>
    <td>
      <select class="select" autocomplete="off">
        <option value="">Select Product</option>
        <option value="1">Antiuqe Camera</option>
        <option value="2">Stylish Sunglass</option>
        <option value="3">Apple Watch 2023</option>
      </select>
    </td>
    <td>
      <input type="text" placeholder="0.00" class="input">
    </td>
    <td>
      <input type="text" placeholder="1" class="input">
    </td>
    <td>
      <span class="w-full inline-block text-right font-semibold text-slate-700 dark:text-slate-200">
        $00.00
      </span>
    </td>
    <td class="!py-0 !px-0 !pr-2">
      <div class="flex items-center justify-center">  
        <button
          class="btn-remove-item cursor-pointer rounded-full p-1 font-medium focus:bg-slate-300 focus:bg-opacity-50 focus:text-slate-600"
        >
          ${r.icons.x.toSvg({class:"h-4 w-4"})}
        </button>
      </div>
    </td>
  </tr>
`;o&&o.addEventListener("click",function(){const t=l.querySelector("tbody");t.innerHTML+=i;const e=t.querySelectorAll(".btn-remove-item");e.length&&[...e].forEach(s=>{s.addEventListener("click",c)})});n.length&&[...n].forEach(t=>{t.addEventListener("click",c)});function c(){l.querySelectorAll("tbody > tr").length>1&&this.parentElement.parentElement.parentElement.remove()}
