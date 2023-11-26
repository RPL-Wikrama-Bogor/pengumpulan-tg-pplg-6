const express = require('express');
const writerController = require('../controllers/writer-controller');

const router = express.Router();

// HTTP Method: GET, POST, PUT/PATCH, DELETE
router.get("/", writerController.getWriters);
router.get("/:id", writerController.getWriter);
router.post("/", writerController.addWriter);
router.put("/:id", writerController.editWriter);
router.delete("/:id", writerController.deleteWriter);

module.exports = router;
