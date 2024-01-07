//Third party packages
import '@fortawesome/fontawesome-free/js/all';
import feather from 'feather-icons';
import ResizeObserver from 'resize-observer-polyfill';
import 'simplebar';

//Core components
import accordion from './components/accordion';
import alert from './components/alert';
import carousel from './components/carousel';
import checkAll from './components/check-all';
import codeViewer from './components/code-viewer';
import datepicker from './components/datepicker';
import drawer from './components/drawer';
import dropdown from './components/dropdown';
import editor from './components/editor';
import modal from './components/modal';
import searchModal from './components/search-modal';
import select from './components/select';
import sidebar from './components/sidebar';
import tabs from './components/tabs';
import themeSwitcher from './components/theme-switcher';
import tooltip from './components/tooltip';
import uploader from './components/uploader';
import toast from './components/toast';

// Initialize searchModal
searchModal.init();

// Initialize themeSwitcher
themeSwitcher.init();

// Initialize codeViewer
codeViewer.init();

// Initialize alert
alert.init();

// Initialize accordion
accordion.init();

// Initialize dropdown
dropdown.init();

// Initialize modal
modal.init();

// Initialize sidebar
sidebar.init();

// Initialize tabs
tabs.init();

// Initialize Tooltip
tooltip.init();

// Initialize carousel
carousel.init();

// Initialize editor
editor.init();

// Initialize select
select.init();

// Initialize uploader
uploader.init();

// Initialize datepicker
datepicker.init();

// Initialize drawer
drawer.init();

// Initialize checkAll
checkAll.init();

// Initialize feather-icons. Must be Initialize at the end.
feather.replace();

// Polyfill for ResizeObserver
window.ResizeObserver = ResizeObserver;

import './bootstrap';

if (window.currentRoute === 'admin.ecommerce.report') {
    import('./custom/ecommerce.js').then(module => {
    }).catch(error => console.error("Error loading ecommerce.js:", error));
} else if (window.currentRoute === 'admin.dashboard') {
    import('./custom/analytics.js').then(module => {
    }).catch(error => console.error("Error loading analytics.js:", error));
} else if (window.currentRoute === 'admin.calendar') {
    import('./custom/calendar.js').then(module => {
    }).catch(error => console.error("Error loading calendar.js:", error));
} else if (window.currentRoute === 'admin.chat') {
    import('./custom/chat.js').then(module => {
    }).catch(error => console.error("Error loading chat.js:", error));
} else if (window.currentRoute === 'admin.email') {
    import('./custom/email.js').then(module => {
    }).catch(error => console.error("Error loading email.js:", error));
}else if (window.currentRoute === 'admin.invoice.create') {
    import('./custom/invoice-create.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
} else if (window.currentRoute === 'admin.table.data') {
    import('./custom/data-table.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
} else if (window.currentRoute === 'admin.chart.index') {
    import('./custom/apex-charts.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
} else if (window.currentRoute === 'admin.form.datepicker') {
    import('./custom/datepicker.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
}  else if (window.currentRoute === 'admin.form.editor') {
    import('./custom/editor.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
} else if (window.currentRoute === 'admin.form.uploader') {
    import('./custom/uploader.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
} else if (window.currentRoute === 'admin.form.validation') {
    import('./custom/form-validation.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
} else if (window.currentRoute === 'admin.common.toast') {
    import('./custom/toast.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
} else if (window.currentRoute === 'admin.common.modal') {
    import('./custom/modal.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
} else if (window.currentRoute === 'admin.common.drawer') {
    import('./custom/drawer.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
}  else if (window.currentRoute === 'admin.common.carousel') {
    import('./custom/carousel.js').then(module => {
    }).catch(error => console.error("Error loading invoice-create.js:", error));
} 

window.toast= toast;
